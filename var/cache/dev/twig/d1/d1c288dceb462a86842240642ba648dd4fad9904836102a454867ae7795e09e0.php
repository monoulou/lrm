<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dfacee0a4cbd9a17ca70c6bcc8c1cffc78e874f3bc43de73b631023d8f14d61e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ec39a2f0823a791551000ec08a28525ddd8cae01ee7678b8c3289f8672966297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec39a2f0823a791551000ec08a28525ddd8cae01ee7678b8c3289f8672966297->enter($__internal_ec39a2f0823a791551000ec08a28525ddd8cae01ee7678b8c3289f8672966297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_c5771f627f84f7fbaa03b43d6a88c3bb10284aef493f47b4cd003f4f2d6013a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5771f627f84f7fbaa03b43d6a88c3bb10284aef493f47b4cd003f4f2d6013a9->enter($__internal_c5771f627f84f7fbaa03b43d6a88c3bb10284aef493f47b4cd003f4f2d6013a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec39a2f0823a791551000ec08a28525ddd8cae01ee7678b8c3289f8672966297->leave($__internal_ec39a2f0823a791551000ec08a28525ddd8cae01ee7678b8c3289f8672966297_prof);

        
        $__internal_c5771f627f84f7fbaa03b43d6a88c3bb10284aef493f47b4cd003f4f2d6013a9->leave($__internal_c5771f627f84f7fbaa03b43d6a88c3bb10284aef493f47b4cd003f4f2d6013a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db70cec3b638f1d124d12a7a6bf4d817bfd1a21aa3ba3fbbdb6465d596fb15f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db70cec3b638f1d124d12a7a6bf4d817bfd1a21aa3ba3fbbdb6465d596fb15f6->enter($__internal_db70cec3b638f1d124d12a7a6bf4d817bfd1a21aa3ba3fbbdb6465d596fb15f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b289a955052db1da010622b5236d91b5429b47de2bfeea13a48f7dd18a5f1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b289a955052db1da010622b5236d91b5429b47de2bfeea13a48f7dd18a5f1d1->enter($__internal_9b289a955052db1da010622b5236d91b5429b47de2bfeea13a48f7dd18a5f1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_9b289a955052db1da010622b5236d91b5429b47de2bfeea13a48f7dd18a5f1d1->leave($__internal_9b289a955052db1da010622b5236d91b5429b47de2bfeea13a48f7dd18a5f1d1_prof);

        
        $__internal_db70cec3b638f1d124d12a7a6bf4d817bfd1a21aa3ba3fbbdb6465d596fb15f6->leave($__internal_db70cec3b638f1d124d12a7a6bf4d817bfd1a21aa3ba3fbbdb6465d596fb15f6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
