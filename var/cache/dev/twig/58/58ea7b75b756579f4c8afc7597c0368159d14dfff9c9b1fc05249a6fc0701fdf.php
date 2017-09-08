<?php

/* MAUserBundle:Security:login.html.twig */
class __TwigTemplate_4f46276a541efdf20b368e3ab3dca07bddd737a11593095285d9efddf38e9b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Security:login.html.twig", 2);
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
        $__internal_88f7a54ccd23dd21e18c09491a625cb8070f8f1d22062715eff2f100f683310f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f7a54ccd23dd21e18c09491a625cb8070f8f1d22062715eff2f100f683310f->enter($__internal_88f7a54ccd23dd21e18c09491a625cb8070f8f1d22062715eff2f100f683310f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login.html.twig"));

        $__internal_6d27fe0a3a5fe6651f6755d7c9bb382280dd3b2868b1f5cf1b8fff229a8775a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d27fe0a3a5fe6651f6755d7c9bb382280dd3b2868b1f5cf1b8fff229a8775a7->enter($__internal_6d27fe0a3a5fe6651f6755d7c9bb382280dd3b2868b1f5cf1b8fff229a8775a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88f7a54ccd23dd21e18c09491a625cb8070f8f1d22062715eff2f100f683310f->leave($__internal_88f7a54ccd23dd21e18c09491a625cb8070f8f1d22062715eff2f100f683310f_prof);

        
        $__internal_6d27fe0a3a5fe6651f6755d7c9bb382280dd3b2868b1f5cf1b8fff229a8775a7->leave($__internal_6d27fe0a3a5fe6651f6755d7c9bb382280dd3b2868b1f5cf1b8fff229a8775a7_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_baea13ca53a13efbe51a8e9b26602cce77893eb2fcb32bfc25bbdcf616840ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baea13ca53a13efbe51a8e9b26602cce77893eb2fcb32bfc25bbdcf616840ab8->enter($__internal_baea13ca53a13efbe51a8e9b26602cce77893eb2fcb32bfc25bbdcf616840ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5a3f58bf7c770a7512d3aa3c83bfbbfd9745f97938d2ef28e3075b5b46a810fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3f58bf7c770a7512d3aa3c83bfbbfd9745f97938d2ef28e3075b5b46a810fd->enter($__internal_5a3f58bf7c770a7512d3aa3c83bfbbfd9745f97938d2ef28e3075b5b46a810fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5a3f58bf7c770a7512d3aa3c83bfbbfd9745f97938d2ef28e3075b5b46a810fd->leave($__internal_5a3f58bf7c770a7512d3aa3c83bfbbfd9745f97938d2ef28e3075b5b46a810fd_prof);

        
        $__internal_baea13ca53a13efbe51a8e9b26602cce77893eb2fcb32bfc25bbdcf616840ab8->leave($__internal_baea13ca53a13efbe51a8e9b26602cce77893eb2fcb32bfc25bbdcf616840ab8_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Security:login.html.twig";
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
{% endblock fos_user_content %}", "MAUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
