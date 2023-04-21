const DoneIcon = () => (
    <div style={{ height: 15, width: 15, marginRight: 5, marginBottom: 10 }}>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
            <linearGradient
                id="fmj0Io0fa30KSKszE9hmsa"
                x1="11.27"
                x2="36.73"
                y1="2493.259"
                y2="2518.72"
                gradientTransform="translate(0 -2484)"
                gradientUnits="userSpaceOnUse"
            >
                <stop offset={0} stopColor="#0BBC5F" />
                <stop offset={1} stopColor="#157B15" />
            </linearGradient>
            <path
                fill="url(#fmj0Io0fa30KSKszE9hmsa)"
                d="M36.902,34.536c6.932-7.126,6.775-18.521-0.351-25.453S18.03,2.308,11.098,9.433	c-6.797,6.987-6.797,18.116,0,25.103c0.018,0.019,0.03,0.04,0.048,0.059l0.059,0.059c0.047,0.048,0.094,0.095,0.142,0.142	l11.239,11.239c0.781,0.781,2.047,0.781,2.828,0c0,0,0,0,0,0l11.239-11.239c0.048-0.047,0.095-0.094,0.142-0.142l0.059-0.059	C36.873,34.576,36.885,34.554,36.902,34.536z"
            />
            <radialGradient
                id="fmj0Io0fa30KSKszE9hmsb"
                cx={24}
                cy={96}
                r="9.5"
                gradientTransform="matrix(1 0 0 -1 0 118)"
                gradientUnits="userSpaceOnUse"
            >
                <stop offset=".177" />
                <stop offset={1} stopOpacity={0} />
            </radialGradient>
            <circle
                cx={24}
                cy={22}
                r="9.5"
                fill="url(#fmj0Io0fa30KSKszE9hmsb)"
            />
            <circle cx={24} cy={22} r={8} fill="#f9f9f9" />
        </svg>
    </div>
);

export default DoneIcon;
