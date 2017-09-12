<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e5e905a08de63d190931a289f4e94f996e70e0bbddea65d49a7866cecbbd0d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 2);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c34128a2acfbc8d7d6c9989c34bad832f367f516571d914cbba5cc08a023538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c34128a2acfbc8d7d6c9989c34bad832f367f516571d914cbba5cc08a023538->enter($__internal_9c34128a2acfbc8d7d6c9989c34bad832f367f516571d914cbba5cc08a023538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_6f07de14063ec142718c1644051782c3b1033f73df53c8f2b5ebae4f17524c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f07de14063ec142718c1644051782c3b1033f73df53c8f2b5ebae4f17524c84->enter($__internal_6f07de14063ec142718c1644051782c3b1033f73df53c8f2b5ebae4f17524c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c34128a2acfbc8d7d6c9989c34bad832f367f516571d914cbba5cc08a023538->leave($__internal_9c34128a2acfbc8d7d6c9989c34bad832f367f516571d914cbba5cc08a023538_prof);

        
        $__internal_6f07de14063ec142718c1644051782c3b1033f73df53c8f2b5ebae4f17524c84->leave($__internal_6f07de14063ec142718c1644051782c3b1033f73df53c8f2b5ebae4f17524c84_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21c32a096bdafd1fd86fca84347855a0a35bfcfcca7ef0d559b10610752dc920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c32a096bdafd1fd86fca84347855a0a35bfcfcca7ef0d559b10610752dc920->enter($__internal_21c32a096bdafd1fd86fca84347855a0a35bfcfcca7ef0d559b10610752dc920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c10c726d317940852f2060e88e80d726495aa33ff4c37f7aafd05db4173853f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10c726d317940852f2060e88e80d726495aa33ff4c37f7aafd05db4173853f6->enter($__internal_c10c726d317940852f2060e88e80d726495aa33ff4c37f7aafd05db4173853f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c10c726d317940852f2060e88e80d726495aa33ff4c37f7aafd05db4173853f6->leave($__internal_c10c726d317940852f2060e88e80d726495aa33ff4c37f7aafd05db4173853f6_prof);

        
        $__internal_21c32a096bdafd1fd86fca84347855a0a35bfcfcca7ef0d559b10610752dc920->leave($__internal_21c32a096bdafd1fd86fca84347855a0a35bfcfcca7ef0d559b10610752dc920_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
