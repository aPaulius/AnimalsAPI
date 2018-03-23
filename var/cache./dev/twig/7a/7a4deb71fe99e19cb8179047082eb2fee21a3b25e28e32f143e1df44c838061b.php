<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_db7f08da791fe11522aba939bc9ea7da04486075f8b148a6b535f9798e54aa3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbaea0a3d4c95f5105407b661fabe0d90cfbeac2ed0be6446ead3c113f6e3dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbaea0a3d4c95f5105407b661fabe0d90cfbeac2ed0be6446ead3c113f6e3dd8->enter($__internal_dbaea0a3d4c95f5105407b661fabe0d90cfbeac2ed0be6446ead3c113f6e3dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1e8942288fbe823534b0e8646836b1a8a989b5bb70173fc34faa05886d13895f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8942288fbe823534b0e8646836b1a8a989b5bb70173fc34faa05886d13895f->enter($__internal_1e8942288fbe823534b0e8646836b1a8a989b5bb70173fc34faa05886d13895f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbaea0a3d4c95f5105407b661fabe0d90cfbeac2ed0be6446ead3c113f6e3dd8->leave($__internal_dbaea0a3d4c95f5105407b661fabe0d90cfbeac2ed0be6446ead3c113f6e3dd8_prof);

        
        $__internal_1e8942288fbe823534b0e8646836b1a8a989b5bb70173fc34faa05886d13895f->leave($__internal_1e8942288fbe823534b0e8646836b1a8a989b5bb70173fc34faa05886d13895f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f1a258d04994dad0ec3ca540f4757c29cd1e82b10abcfe11c43ad358e86787d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1a258d04994dad0ec3ca540f4757c29cd1e82b10abcfe11c43ad358e86787d->enter($__internal_2f1a258d04994dad0ec3ca540f4757c29cd1e82b10abcfe11c43ad358e86787d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0ef5e69d233300b89c888f9a792db0590c825060b32cc667cbd2fba837f578a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef5e69d233300b89c888f9a792db0590c825060b32cc667cbd2fba837f578a9->enter($__internal_0ef5e69d233300b89c888f9a792db0590c825060b32cc667cbd2fba837f578a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0ef5e69d233300b89c888f9a792db0590c825060b32cc667cbd2fba837f578a9->leave($__internal_0ef5e69d233300b89c888f9a792db0590c825060b32cc667cbd2fba837f578a9_prof);

        
        $__internal_2f1a258d04994dad0ec3ca540f4757c29cd1e82b10abcfe11c43ad358e86787d->leave($__internal_2f1a258d04994dad0ec3ca540f4757c29cd1e82b10abcfe11c43ad358e86787d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
